import 'dart:convert';
import 'package:flutter/material.dart';
import 'package:flutter/widgets.dart';
import 'package:http/http.dart' as http;
import 'package:gallery_saver/gallery_saver.dart';

void main() {
  runApp(MaterialApp(
    debugShowCheckedModeBanner: false,
    home: MyApp(),
  ));
}

class MyApp extends StatefulWidget {
  @override
  _MyAppState createState() => _MyAppState();
}

class _MyAppState extends State<MyApp> {
  TextEditingController urlController =
      new TextEditingController(text: "google.com");
  String url = "https://screenshotapi.net/api/v1/screenshot?url=";
  String token = "&token=L1P8SCJLQC4U1S0LIEHGGK78BIAQRMXH";
  var jsonData;
  String img;

  void init() {
    super.initState();
    getScreenshot();
  }

  Future<void> getScreenshot() async {
    var res = await http.get(url + urlController.text + token);
    var jsonData = json.decode(res.body);
    img = jsonData['screenshot'];
    print(jsonData);

    setState(() {});
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(title: Text("Web Screenshot")),
      body: Container(
        padding: EdgeInsets.all(10),
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            TextField(
              controller: urlController,
            ),
            RaisedButton(
              onPressed: () {
                getScreenshot();
                img = null;
                setState(() {});
              },
              child: Text("Take a Screenshot"),
            ),
            Container(
              child: img == null
                  ? displayLoading()
                  : Card(
                      child: Image.network(img),
                    ),
            )
          ],
        ),
      ),
      floatingActionButton: FloatingActionButton(
        onPressed: downloadImage,
        child: Icon(Icons.file_download),
      ),
    );
  }

  downloadImage() {
    if (img == null) return;

    try {
      GallerySaver.saveImage(img).whenComplete(() {
        print("Download success");
        showDialog(
            context: context,
            child: AlertDialog(
                content: Text("Image 🖼 has been downloaded sucessfully")));
      });
    } catch (e) {}
  }

  Widget displayLoading() {
    getScreenshot();
    return CircularProgressIndicator();
  }
}
