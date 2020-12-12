package com.e.bd_androidhttp;

import androidx.appcompat.app.AppCompatActivity;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {

    //Button btn;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);

        setContentView(R.layout.activity_main);

        /*btn = findViewById(R.id.btn_acceso);
        btn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

            }
        });*/
    }

    public void abrirActivities(View v){
        Intent i;
        switch (v.getId()){

            case R.id.btn_acceso:   //VALIDAR USUARIO Y CONTRASEÑA EN BD de MySQL
                i = new Intent(this, ActivityMenu.class);
                startActivity(i);
                break;

            case R.id.btn_registro: break;

            default: break;
        }
    }//metodo abrirActivities

}//class