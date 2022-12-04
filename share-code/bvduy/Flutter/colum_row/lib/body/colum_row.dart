import 'package:column_row/body/widget/column_row.dart';
import 'package:flutter/material.dart';

class ColumnRow extends StatelessWidget {
  const ColumnRow({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: const Text('Column - Row'),
      ),
      body: const WidgetColumnRow(),
    );
  }
}
