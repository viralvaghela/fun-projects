import 'package:flutter/material.dart';
import 'package:flutter/widgets.dart';

void main() => runApp(MyApp());

class MyTheme with ChangeNotifier {
  static bool isDark = true;
  ThemeMode currentTheme() {
    return isDark ? ThemeMode.dark : ThemeMode.light;
  }

  void switchTheme() {
    isDark = !isDark;
    notifyListeners();
  }
}

class MyApp extends StatefulWidget {
  @override
  _MyAppState createState() => _MyAppState();
}

class _MyAppState extends State<MyApp> {
  MyTheme currentTheme = MyTheme();

  void initState() {
    super.initState();
    currentTheme.addListener(() {
      print("changes");
      setState(() {});
    });
  }

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      theme: ThemeData.light(),
      darkTheme: ThemeData.dark(),
      themeMode: currentTheme.currentTheme(),
      home: Scaffold(
          appBar: AppBar(
            title: Text("Change Theme"),
          ),
          floatingActionButton: FloatingActionButton.extended(
            onPressed: () {
              currentTheme.switchTheme();
            },
            label: Text("Change"),
            icon: Icon(Icons.brightness_medium),
          )),
    );
  }
}
