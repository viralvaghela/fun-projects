package application;
	
import java.io.IOException;

import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.stage.Stage;
import javafx.scene.Parent;
import javafx.scene.Scene;


public class Main extends Application {
	@Override
	public void start(Stage primaryStage) {

			Parent root;
			try {
				root = FXMLLoader.load(getClass().getResource("/application/Main.fxml"));
				
				Scene scene = new Scene(root);
				primaryStage.setScene(scene);
				primaryStage.show();
				primaryStage.setTitle("Beat Maker");
			}	
			catch (IOException e) 
			{
			
				e.printStackTrace();
			}
	}
	
	public static void main(String[] args) {
		launch(args);
	}
}
