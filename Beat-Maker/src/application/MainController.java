package application;

import java.net.URL;
import java.util.ResourceBundle;

import com.jfoenix.controls.JFXButton;

import javafx.event.Event;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.effect.Glow;
import javafx.scene.input.KeyEvent;
import javafx.scene.media.Media;
import javafx.scene.media.MediaPlayer;

public class MainController implements Initializable {
	

		Media m ;
		MediaPlayer mp;
		
		@FXML
	    private JFXButton btn1;

	    @FXML
	    private JFXButton btn2;

	    @FXML
	    private JFXButton btn4;

	    @FXML
	    private JFXButton btn6;

	    @FXML
	    private JFXButton btn3;

	    @FXML
	    private JFXButton btn5;

	    
	    
	    public void clicked1()
	    {			
	    	//Glow glow = new Glow();
	    	//glow.setLevel(0.5);
	    	//btn1.setEffect(glow);
	    	Media m = new Media(this.getClass().getResource("/sounds/bubbles.mp3").toString());
	    	MediaPlayer mp=new MediaPlayer(m);	
	    	mp.setAutoPlay(true);
	    	mp.play();
	    	
	
	    }


	    public void clicked2()
	    {
	    	Media m =  new Media(this.getClass().getResource("/sounds/clay.mp3").toString());  
			MediaPlayer mp=new MediaPlayer(m);
	    	mp.play();
	    	
	    }

	    public void clicked3()
	    {
			
	    	Media m =  new Media(this.getClass().getResource("/sounds/confetti.mp3").toString());  
			MediaPlayer mp=new MediaPlayer(m);
	    	mp.play();
	    	
	    }

	    public void clicked4()
	    {
	    	Media m =  new Media(this.getClass().getResource("/sounds/glimmer.mp3").toString());  
			MediaPlayer mp=new MediaPlayer(m);
	    	mp.play();
	    	
	    }

	    public void clicked5()
	    {
			 
	    	Media m =  new Media(this.getClass().getResource("/sounds/moon.mp3").toString());  
			MediaPlayer mp=new MediaPlayer(m);
	    	mp.play();
	    	
	    }

	    public void clicked6()
	    {
			 
	    	Media m =  new Media(this.getClass().getResource("/sounds/ufo.mp3").toString());  
			MediaPlayer mp=new MediaPlayer(m);
	    	mp.play();
	    	 
	    }


		@Override
		public void initialize(URL location, ResourceBundle resources) {
			btn1.setOnKeyPressed(new EventHandler<KeyEvent>() {

				@Override
				public void handle(KeyEvent event) {
					switch(event.getCode()) {
					case A:clicked1();break;
					case S:clicked2();break;
					case D:clicked3();break;
					case F:clicked4();break;
					case G:clicked5();break;
					case H:clicked6();break;
					
					default:System.out.println("i am defaut");
					
					}
					
				}
			});
			
		}
	    
}
