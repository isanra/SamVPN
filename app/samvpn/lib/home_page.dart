import 'package:flutter/material.dart';

class HomePage extends StatefulWidget {
  final ThemeMode themeMode;
  final ValueChanged<ThemeMode> onThemeChanged;

  const HomePage({
    super.key,
    required this.themeMode,
    required this.onThemeChanged,
  });

  @override
  State<HomePage> createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {
  bool connected = false;

  static const mint = Color(0xFF54DCC7);

  @override
  Widget build(BuildContext context) {
    final theme = Theme.of(context);
    final colors = theme.colorScheme;
    final isDark = theme.brightness == Brightness.dark;

    final muted = colors.onSurfaceVariant;
    final panel = colors.surfaceContainer;
    final background = colors.surface;

    return Scaffold(
      body: Stack(
        children: [
          Positioned.fill(
            child: DecoratedBox(
              decoration: BoxDecoration(
                gradient: RadialGradient(
                  center: const Alignment(0, -0.2),
                  radius: 1.15,
                  colors: [
                    isDark ? const Color(0xFF142849) : const Color(0xFFE0E9FF),
                    background,
                  ],
                ),
              ),
            ),
          ),

          SafeArea(
            child: Padding(
              padding: const EdgeInsets.symmetric(horizontal: 22, vertical: 8),
              child: Row(
                children: [
                  Icon(Icons.shield_rounded, color: colors.primary, size: 25),
                  const SizedBox(width: 9),
                  Text(
                    'SamVPN',
                    style: theme.textTheme.titleLarge?.copyWith(
                      fontWeight: FontWeight.bold,
                    ),
                  ),
                  const Spacer(),
                  Icon(
                    isDark ? Icons.dark_mode : Icons.light_mode,
                    color: muted,
                    size: 19,
                  ),
                  const SizedBox(width: 4),
                  Switch.adaptive(
                    value: isDark,
                    onChanged: (value) {
                      widget.onThemeChanged(
                        value ? ThemeMode.dark : ThemeMode.light,
                      );
                    },
                    activeTrackColor: colors.primary,
                  ),
                ],
              ),
            ),
          ),

          Center(
            child: Padding(
              padding: const EdgeInsets.only(top: 55, bottom: 75),
              child: Column(
                mainAxisSize: MainAxisSize.min,
                children: [
                  Container(
                    width: 190,
                    height: 190,
                    padding: const EdgeInsets.all(22),
                    decoration: BoxDecoration(
                      shape: BoxShape.circle,
                      border: Border.all(color: colors.primary.withAlpha(55)),
                      color: colors.primary.withAlpha(18),
                    ),
                    child: Material(
                      color: connected ? colors.primary : mint,
                      shape: const CircleBorder(),
                      child: InkWell(
                        customBorder: const CircleBorder(),
                        onTap: () {
                          setState(() => connected = !connected);
                        },
                        child: Icon(
                          connected
                              ? Icons.shield_rounded
                              : Icons.power_settings_new_rounded,
                          size: 45,
                          color: connected
                              ? colors.onPrimary
                              : const Color(0xFF071523),
                        ),
                      ),
                    ),
                  ),
                  const SizedBox(height: 24),
                  Text(
                    connected ? 'Koneksi terlindungi' : 'SamVPN siap',
                    style: theme.textTheme.titleLarge?.copyWith(
                      fontWeight: FontWeight.w700,
                    ),
                  ),
                  const SizedBox(height: 8),
                  Text(
                    connected
                        ? 'Kamu terhubung ke server pilihan'
                        : 'Ketuk tombol untuk terhubung',
                    style: TextStyle(color: muted, fontSize: 13),
                  ),
                  const SizedBox(height: 18),
                  Row(
                    mainAxisSize: MainAxisSize.min,
                    children: [
                      Container(
                        width: 7,
                        height: 7,
                        decoration: BoxDecoration(
                          shape: BoxShape.circle,
                          color: connected ? mint : muted,
                        ),
                      ),
                      const SizedBox(width: 8),
                      Text(
                        connected ? 'TERHUBUNG' : 'TERPUTUS',
                        style: TextStyle(
                          color: connected ? mint : muted,
                          fontSize: 11,
                          fontWeight: FontWeight.bold,
                          letterSpacing: 1,
                        ),
                      ),
                    ],
                  ),
                ],
              ),
            ),
          ),

          DraggableScrollableSheet(
            initialChildSize: 0.145,
            minChildSize: 0.145,
            maxChildSize: 0.76,
            snap: true,
            snapSizes: const [0.145, 0.76],
            builder: (context, controller) {
              return Container(
                decoration: BoxDecoration(
                  color: panel,
                  borderRadius: const BorderRadius.vertical(
                    top: Radius.circular(30),
                  ),
                  border: Border.all(
                    color: colors.outlineVariant.withAlpha(100),
                  ),
                  boxShadow: [
                    BoxShadow(
                      color: Colors.black.withAlpha(isDark ? 50 : 15),
                      blurRadius: 30,
                      offset: const Offset(0, -8),
                    ),
                  ],
                ),
                child: ListView(
                  controller: controller,
                  padding: const EdgeInsets.fromLTRB(22, 12, 22, 28),
                  children: [
                    Center(
                      child: Container(
                        width: 38,
                        height: 4,
                        decoration: BoxDecoration(
                          color: muted.withAlpha(120),
                          borderRadius: BorderRadius.circular(8),
                        ),
                      ),
                    ),
                    const SizedBox(height: 18),
                    Row(
                      children: [
                        _ServerIcon(),
                        const SizedBox(width: 12),
                        Expanded(
                          child: Column(
                            crossAxisAlignment: CrossAxisAlignment.start,
                            children: [
                              _SectionTitle('SERVER AKTIF'),
                              const SizedBox(height: 5),
                              Text(
                                'Los Angeles · US West',
                                style: theme.textTheme.titleSmall?.copyWith(
                                  fontWeight: FontWeight.bold,
                                ),
                              ),
                            ],
                          ),
                        ),
                        Icon(Icons.keyboard_arrow_up_rounded, color: muted),
                      ],
                    ),
                    const SizedBox(height: 28),
                    _SectionTitle('LOKASI SERVER'),
                    const SizedBox(height: 12),
                    Container(
                      padding: const EdgeInsets.all(16),
                      decoration: BoxDecoration(
                        borderRadius: BorderRadius.circular(18),
                        color: colors.primaryContainer.withAlpha(
                          isDark ? 100 : 150,
                        ),
                        border: Border.all(
                          color: colors.outlineVariant.withAlpha(100),
                        ),
                      ),
                      child: Row(
                        children: [
                          const Text('🇺🇸', style: TextStyle(fontSize: 25)),
                          const SizedBox(width: 12),
                          Expanded(
                            child: Column(
                              crossAxisAlignment: CrossAxisAlignment.start,
                              children: [
                                Text(
                                  'SamVPN · Los Angeles 01',
                                  style: theme.textTheme.titleSmall?.copyWith(
                                    fontWeight: FontWeight.bold,
                                  ),
                                ),
                                const SizedBox(height: 5),
                                Text(
                                  'United States · WireGuard',
                                  style: TextStyle(color: muted, fontSize: 12),
                                ),
                              ],
                            ),
                          ),
                          const Text(
                            'READY',
                            style: TextStyle(
                              color: mint,
                              fontSize: 10,
                              fontWeight: FontWeight.bold,
                            ),
                          ),
                        ],
                      ),
                    ),
                    const SizedBox(height: 24),
                    _SectionTitle('STATISTIK KONEKSI'),
                    const SizedBox(height: 12),
                    Row(
                      children: [
                        const Expanded(
                          child: _StatCard(
                            icon: Icons.schedule_rounded,
                            label: 'Durasi aktif',
                            value: '00:00:00',
                          ),
                        ),
                        const SizedBox(width: 11),
                        const Expanded(
                          child: _StatCard(
                            icon: Icons.multiline_chart_rounded,
                            label: 'Latensi',
                            value: '— ms',
                          ),
                        ),
                      ],
                    ),
                    const SizedBox(height: 22),
                    const Divider(),
                    const SizedBox(height: 12),
                    _SectionTitle('LALU LINTAS DATA'),
                    const SizedBox(height: 16),
                    const Row(
                      children: [
                        Expanded(
                          child: _TrafficStat(
                            icon: Icons.arrow_downward_rounded,
                            label: 'Diunduh',
                            value: '0.00 MB',
                          ),
                        ),
                        Expanded(
                          child: _TrafficStat(
                            icon: Icons.arrow_upward_rounded,
                            label: 'Diunggah',
                            value: '0.00 MB',
                          ),
                        ),
                      ],
                    ),
                    const SizedBox(height: 22),
                    Text(
                      'Statistik akan menampilkan data aktual setelah '
                      'dihubungkan ke status tunnel WireGuard.',
                      textAlign: TextAlign.center,
                      style: TextStyle(color: muted, fontSize: 10, height: 1.6),
                    ),
                  ],
                ),
              );
            },
          ),
        ],
      ),
    );
  }
}

class _ServerIcon extends StatelessWidget {
  const _ServerIcon();

  @override
  Widget build(BuildContext context) {
    final colors = Theme.of(context).colorScheme;

    return Container(
      width: 43,
      height: 43,
      decoration: BoxDecoration(
        color: colors.primaryContainer,
        borderRadius: BorderRadius.circular(14),
      ),
      child: Icon(Icons.dns_rounded, color: colors.primary, size: 22),
    );
  }
}

class _SectionTitle extends StatelessWidget {
  const _SectionTitle(this.text);

  final String text;

  @override
  Widget build(BuildContext context) {
    return Text(
      text,
      style: TextStyle(
        color: Theme.of(context).colorScheme.onSurfaceVariant,
        fontSize: 11,
        fontWeight: FontWeight.bold,
        letterSpacing: 1.5,
      ),
    );
  }
}

class _StatCard extends StatelessWidget {
  const _StatCard({
    required this.icon,
    required this.label,
    required this.value,
  });

  final IconData icon;
  final String label;
  final String value;

  @override
  Widget build(BuildContext context) {
    final colors = Theme.of(context).colorScheme;

    return Container(
      padding: const EdgeInsets.all(15),
      decoration: BoxDecoration(
        color: colors.surfaceContainerHighest.withAlpha(100),
        border: Border.all(color: colors.outlineVariant.withAlpha(100)),
        borderRadius: BorderRadius.circular(17),
      ),
      child: Column(
        crossAxisAlignment: CrossAxisAlignment.start,
        children: [
          Row(
            children: [
              Icon(icon, color: colors.onSurfaceVariant, size: 15),
              const SizedBox(width: 7),
              Expanded(
                child: Text(
                  label,
                  style: TextStyle(
                    color: colors.onSurfaceVariant,
                    fontSize: 11,
                  ),
                ),
              ),
            ],
          ),
          const SizedBox(height: 12),
          Text(
            value,
            style: Theme.of(context).textTheme.titleLarge
                ?.copyWith(fontWeight: FontWeight.bold, letterSpacing: -0.4),
          ),
        ],
      ),
    );
  }
}

class _TrafficStat extends StatelessWidget {
  const _TrafficStat({
    required this.icon,
    required this.label,
    required this.value,
  });

  final IconData icon;
  final String label;
  final String value;

  @override
  Widget build(BuildContext context) {
    final colors = Theme.of(context).colorScheme;

    return Row(
      children: [
        Container(
          width: 34,
          height: 34,
          decoration: BoxDecoration(
            color: colors.primaryContainer,
            borderRadius: BorderRadius.circular(12),
          ),
          child: Icon(icon, color: colors.primary, size: 17),
        ),
        const SizedBox(width: 10),
        Expanded(
          child: Column(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: [
              Text(
                label,
                style: TextStyle(color: colors.onSurfaceVariant, fontSize: 11),
              ),
              const SizedBox(height: 4),
              Text(
                value,
                style: Theme.of(context).textTheme.bodyMedium
                    ?.copyWith(fontWeight: FontWeight.bold),
              ),
            ],
          ),
        ),
      ],
    );
  }
}
