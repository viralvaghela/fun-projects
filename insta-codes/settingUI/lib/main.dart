import 'package:flutter/material.dart';
import 'package:settings_ui/settings_ui.dart';

void main() => runApp(MyApp());

class MyApp extends StatefulWidget {
  @override
  _MyAppState createState() => _MyAppState();
}

class _MyAppState extends State<MyApp> {
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home: Scaffold(
        appBar: AppBar(title: Text("Setting UI")),
        body: SettingsList(
          sections: [
            SettingsSection(
              title: 'Network',
              tiles: [
                SettingsTile.switchTile(
                  title: 'Airplane Mode',
                  leading: Icon(Icons.airplanemode_active),
                  switchValue: false,
                  onToggle: (val) {},
                ),
                SettingsTile(
                  title: 'SIM Card & Mobile Data',
                  onTap: () {},
                  leading: Icon(Icons.network_cell),
                ),
                SettingsTile(
                  title: 'Wi-Fi',
                  onTap: () {},
                  leading: Icon(Icons.wifi),
                ),
                SettingsTile(
                  title: 'Bluetooth',
                  onTap: () {},
                  leading: Icon(Icons.bluetooth),
                ),
              ],
            ),
            SettingsSection(
              title: 'Display',
              tiles: [
                SettingsTile(
                  title: 'Display & Brightness',
                  leading: Icon(Icons.brightness_6),
                  onTap: () {},
                ),
                SettingsTile(
                  title: 'Lock Screen',
                  onTap: () {},
                  leading: Icon(Icons.screen_lock_landscape),
                ),
              ],
            ),
            SettingsSection(
              title: 'Sounds & Vibration',
              tiles: [
                SettingsTile.switchTile(
                  title: 'Silent',
                  leading: Icon(Icons.volume_mute),
                  switchValue: true,
                  onToggle: (val) {},
                ),
                SettingsTile.switchTile(
                  title: 'Vibrate On Silent',
                  leading: Icon(Icons.vibration),
                  switchValue: false,
                  onToggle: (val) {},
                ),
              ],
            ),
          ],
        ),
      ),
    );
  }
}
