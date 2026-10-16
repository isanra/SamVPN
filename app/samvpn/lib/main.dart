import 'package:flutter/material.dart';
import 'package:samvpn/home_page.dart';
import 'package:samvpn/login_user.dart';

void main() => runApp(const SamVPNApp());

class SamVPNApp extends StatefulWidget {
  const SamVPNApp({super.key});

  @override
  State<SamVPNApp> createState() => _SamVPNAppState();
}

class _SamVPNAppState extends State<SamVPNApp> {
  ThemeMode themeMode = ThemeMode.system;

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'SamVPN',
      themeMode: themeMode,
      theme: ThemeData(
        useMaterial3: true,
        brightness: Brightness.light,
        colorScheme: ColorScheme.fromSeed(
          seedColor: const Color(0xFF2563EB),
          brightness: Brightness.light,
        ),
        scaffoldBackgroundColor: const Color(0xFFF6F8FC),
        appBarTheme: const AppBarTheme(
          backgroundColor: Color(0xFFF6F8FC),
          elevation: 0,
        ),
        cardTheme: CardThemeData(
          elevation: 0,
          color: Colors.white,
          shape: RoundedRectangleBorder(
            borderRadius: BorderRadius.circular(20),
          ),
        ),
      ),
      darkTheme: ThemeData(
        useMaterial3: true,
        brightness: Brightness.dark,
        colorScheme: ColorScheme.fromSeed(
          seedColor: const Color(0xFF60A5FA),
          brightness: Brightness.dark,
        ),
        scaffoldBackgroundColor: const Color(0xFF0B1120),
        appBarTheme: const AppBarTheme(
          backgroundColor: Color(0xFF0B1120),
          elevation: 0,
        ),
        cardTheme: CardThemeData(
          elevation: 0,
          color: const Color(0xFF172033),
          shape: RoundedRectangleBorder(
            borderRadius: BorderRadius.circular(20),
          ),
        ),
      ),
      initialRoute: '/',
      routes: {
        '/': (context) => LoginPage(),
        '/home': (context) => HomePage(
          themeMode: themeMode,
          onThemeChanged: (mode) {
            setState(() => themeMode = mode);
          },
        ),
      },
    );
  }
}
