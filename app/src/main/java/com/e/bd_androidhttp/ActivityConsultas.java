package com.e.bd_androidhttp;

import android.app.Activity;
import android.os.AsyncTask;
import android.os.Bundle;
import android.text.Editable;
import android.text.TextWatcher;
import android.util.Log;
import android.widget.ArrayAdapter;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.Toast;

import androidx.annotation.Nullable;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.Map;
import java.util.concurrent.Executor;

import controlador.AnalizadorJSON;

public class ActivityConsultas extends Activity {

    ListView listviewAlumnos;
    EditText buscarAlumno;
    ArrayAdapter<String> adapter;
    ArrayList<String> datos = new ArrayList<>();

    @Override
    protected void onCreate(@Nullable Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_consultas);
        buscarAlumno= (EditText)findViewById(R.id.txt_buscar_Alumno);
        new MostrarAlumnos().execute();


        listviewAlumnos = findViewById(R.id.listview_alumnos);
        adapter = new ArrayAdapter<>(this, android.R.layout.simple_list_item_1, datos);
        listviewAlumnos.setAdapter(adapter);
        buscarAlumno.addTextChangedListener(new TextWatcher() {

            @Override
            public void onTextChanged(CharSequence cs, int arg1, int arg2, int arg3) {
                adapter.getFilter().filter(cs);
            }

            @Override
            public void beforeTextChanged(CharSequence arg0, int arg1, int arg2, int arg3) {
                Toast.makeText(getApplicationContext(),"before text change",Toast.LENGTH_LONG).show();
            }

            @Override
            public void afterTextChanged(Editable arg0) {
                Toast.makeText(getApplicationContext(),"after text change", Toast.LENGTH_LONG).show();
            }
        });

    }


    class MostrarAlumnos extends AsyncTask<String, String, String>{

        @Override
        protected String doInBackground(String... strings) {

            String url = "http://10.0.2.2/ago_dic_2020/Sistema%20ABCC/API_REST_Android/api_consultas_alumnos.php";
            String metodo = "POST";

            AnalizadorJSON analizadorJSON = new AnalizadorJSON();
            JSONObject jsonObject = analizadorJSON.consultaHTTP(url);


            try {
                JSONArray jsonArray = jsonObject.getJSONArray("alumnos");


                String cadena = "";
                for (int i=0; i<jsonArray.length();i++){

                    cadena = jsonArray.getJSONObject(i).getString("nc") + " | " +
                            jsonArray.getJSONObject(i).getString("n") + "|" +
                            jsonArray.getJSONObject(i).getString("pa") + "|" +
                            jsonArray.getJSONObject(i).getString("sa") + "|" +
                            jsonArray.getJSONObject(i).getString("e") + "|" +
                            jsonArray.getJSONObject(i).getString("s") + "|" +
                            jsonArray.getJSONObject(i).getString("c");

                    datos.add(cadena);
                }

            } catch (JSONException e) {
                e.printStackTrace();
            }

            return null;
        }
    }


}//class ActivityConsultas*/
