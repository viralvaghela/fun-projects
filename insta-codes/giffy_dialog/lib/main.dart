import 'package:flutter/material.dart';
import 'package:flutter/widgets.dart';
import 'package:giffy_dialog/giffy_dialog.dart';

void main() => runApp(MyApp());

class MyApp extends StatefulWidget {
  @override
  _MyAppState createState() => _MyAppState();
}

class _MyAppState extends State<MyApp> {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      theme: ThemeData(primarySwatch: Colors.deepOrange),
      debugShowCheckedModeBanner: false,
      home: Scaffold(
        appBar: AppBar(
          centerTitle: true,
          title: Text("Giffy Dialog"),
        ),
        body: Center(
          child: NetworkGiffyDialog(
            buttonCancelColor: Colors.red,
            image: Image.network(
                "https://media.giphy.com/media/I1nwVpCaB4k36/giphy.gif"),
            title: Text('Follow ',
                textAlign: TextAlign.center,
                style: TextStyle(fontSize: 26.0, fontWeight: FontWeight.w600)),
            description: Text(
              'Coding Boy to Learn Flutter',
              textAlign: TextAlign.center,
              style: TextStyle(fontSize: 18),
            ),
            buttonOkText: Text(
              "Yeah sure 😀",
              style: TextStyle(color: Colors.white),
            ),
            onlyOkButton: true,
            cornerRadius: 10,
            entryAnimation: EntryAnimation.LEFT,
            onOkButtonPressed: () {},
          ),
        ),
      ),
    );
  }
}
