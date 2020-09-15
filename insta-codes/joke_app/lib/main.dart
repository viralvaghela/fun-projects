import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'dart:convert';
import 'Joke.dart';

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
  var url = "https://official-joke-api.appspot.com/random_joke";
  Joke joke;
  @override
  void initState() {
    super.initState();
    getJoke();
  }

  getJoke() async {
    var res = await http.get(url);
    var jsonData = json.decode(res.body);
    joke = Joke.fromJson(jsonData);
    setState(() {});
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("Jokes"),
      ),
      body: joke == null
          ? Center(child: CircularProgressIndicator())
          : Center(
              child: Card(
                child: Container(
                  height: MediaQuery.of(context).size.height * 0.2,
                  width: MediaQuery.of(context).size.width * 0.8,
                  padding: EdgeInsets.all(10),
                  color: Colors.red[500],
                  child: Center(
                    child: Text(
                      joke.setup + "\n\n" + joke.punchline,
                      style: TextStyle(
                        color: Colors.white,
                        fontSize: 18,
                        fontWeight: FontWeight.bold,
                      ),
                    ),
                  ),
                ),
              ),
            ),
      floatingActionButton: FloatingActionButton(
        onPressed: () {
          joke = null;
          getJoke();
        },
        child: Icon(Icons.refresh),
      ),
    );
  }
}
