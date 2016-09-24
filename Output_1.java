package com.example.infosys;

import android.app.Activity;
import android.os.Bundle;
import android.widget.TextView;

/**
 * Created by Juned on 9/24/2016.
 */
public class Output_1 extends Activity {
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.output_1);

        TextView t1=(TextView)findViewById(R.id.t_data);
        TextView t2 =(TextView)findViewById(R.id.t_sms);
        TextView t3=(TextView)findViewById(R.id.t_voice);

        t1.setText(Input_1.data_ret());
        t2.setText(Input_1.sms_ret());
        t3.setText(Input_1.voice_ret());
    }
}
