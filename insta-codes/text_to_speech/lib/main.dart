import 'package:flutter/material.dart';
import 'package:flutter/widgets.dart';
import 'package:flutter_text_to_speech/flutter_text_to_speech.dart';

void main() => runApp(MyApp());

class MyApp extends StatefulWidget {
  @override
  _MyAppState createState() => _MyAppState();
}

class _MyAppState extends State<MyApp> {
  VoiceController controller = FlutterTextToSpeech.instance.voiceController();
  TextEditingController textController = TextEditingController();
  @override
  void initState() {
    super.initState();
    controller.init();
  }

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      theme: ThemeData.dark(),
      home: Scaffold(
        appBar: AppBar(
          title: Text("Text To Speech"),
        ),
        body: Container(
          child: Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: [
              TextField(
                decoration: InputDecoration(contentPadding: EdgeInsets.all(10)),
                controller: textController,
              ),
              RaisedButton(
                onPressed: () {
                  controller.speak("${textController.text}");
                },
                child: Text("Speak"),
              ),
            ],
          ),
        ),
      ),
    );
  }
}
