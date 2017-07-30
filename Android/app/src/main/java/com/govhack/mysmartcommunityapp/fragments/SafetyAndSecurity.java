package com.govhack.mysmartcommunityapp.fragments;


import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.FrameLayout;
import android.widget.LinearLayout;
import android.widget.RadioButton;
import android.widget.Toast;

import com.github.mikephil.charting.charts.LineChart;
import com.github.mikephil.charting.charts.PieChart;
import com.github.mikephil.charting.data.Entry;
import com.github.mikephil.charting.data.LineData;
import com.github.mikephil.charting.data.LineDataSet;
import com.github.mikephil.charting.data.PieDataSet;
import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.MapFragment;
import com.google.android.gms.maps.MapView;
import com.google.android.gms.maps.MapsInitializer;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.CameraPosition;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.MarkerOptions;
import com.govhack.mysmartcommunityapp.R;

import java.util.ArrayList;

/**
 * A simple {@link Fragment} subclass.
 */
public class SafetyAndSecurity extends Fragment{
    LinearLayout lnrSecurityMain;
    FrameLayout lnrReportMain;
    Button btnReportIssue;
    RadioButton rdouser, rdoAnon;

    public SafetyAndSecurity() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View v = inflater.inflate(R.layout.fragment_safety_and_security, container, false);
        LineChart lineChart = (LineChart) v.findViewById(R.id.linechart);
        lnrReportMain = (FrameLayout)v.findViewById(R.id.main_report);
        btnReportIssue = (Button)v.findViewById(R.id.report_an_issue);
        lnrSecurityMain = (LinearLayout)v.findViewById(R.id.lnr_security_main);
        lnrReportMain.setVisibility(View.GONE);
        rdoAnon = (RadioButton)v.findViewById(R.id.anonymous);
        rdouser = (RadioButton)v.findViewById(R.id.user);

        if(rdouser.isChecked()){
            rdoAnon.setChecked(false);
        }
        if(rdoAnon.isChecked()){
            rdouser.setChecked(false);
        }
        ArrayList<Entry> yvalues = new ArrayList<Entry>();
        yvalues.add(new Entry(30f, 0));
        yvalues.add(new Entry(12f, 1));
        yvalues.add(new Entry(6f, 2));
        LineDataSet dataSet = new LineDataSet(yvalues, "Safety and Security");

        ArrayList<String> xVals = new ArrayList<String>();
        xVals.add("January");
        xVals.add("March");
        xVals.add("May");

        LineData lineData = new LineData(xVals, dataSet);
        lineChart.setData(lineData);
        lineChart.setDescription("");
        dataSet.setDrawFilled(true);
        lineChart.animateY(5000);


        btnReportIssue.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                lnrSecurityMain.setVisibility(View.GONE);
                lnrReportMain.setVisibility(View.VISIBLE);
            }
        });

        return v;
    }

}
