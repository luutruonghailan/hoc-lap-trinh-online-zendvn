import 'package:flutter/material.dart';
import 'package:flutter/widgets.dart';
import 'package:game_age_quay/data/game.dart';

class HomePage extends StatefulWidget {
  const HomePage({super.key});

  @override
  State<HomePage> createState() => _HomePageState();
}

class _HomePageState extends State<HomePage> {
  int index = 0;
  TextEditingController nameController = TextEditingController();

  @override
  Widget build(BuildContext context) {
    return GestureDetector(
      onTap: () {
        FocusScope.of(context).unfocus();
      },
      child: Scaffold(
        appBar: AppBar(
          actions: [
            IconButton(
              onPressed: () {
                showDialog(
                  context: context,
                  builder: (context) => Dialog(
                    child: SizedBox(
                      height: 100,
                      child: Center(
                        child: Text(data[index]['name']),
                      ),
                    ),
                  ),
                );
              },
              icon: const Icon(Icons.child_care),
            ),
            const SizedBox(width: 20),
          ],
        ),
        body: Padding(
          padding: const EdgeInsets.all(8.0),
          child: Column(
            children: [
              Image.asset(data[index]['image']),
              const SizedBox(height: 20),
              TextFormField(
                controller: nameController,
                decoration: const InputDecoration(
                  hintText: 'Nhập tên bộ phim',
                  border: OutlineInputBorder(),
                ),
              ),
              const SizedBox(height: 40),
              Row(
                mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                children: [
                  ElevatedButton(
                      onPressed: () {
                        setState(() {
                          if (index == 0) {
                            index = data.length - 1;
                          } else {
                            index--;
                          }
                        });
                      },
                      child: const Text('back')),
                  ElevatedButton(
                      onPressed: () {
                        if (nameController.text == data[index]['name']) {
                          ScaffoldMessenger.of(context).showSnackBar(
                            const SnackBar(
                              content: Text('chính xác'),
                              backgroundColor: Colors.green,
                            ),
                          );
                        } else {
                          ScaffoldMessenger.of(context).showSnackBar(
                            const SnackBar(
                              content: Text('sai rồi'),
                              backgroundColor: Colors.red,
                            ),
                          );
                        }
                        nameController.clear();
                      },
                      child: const Text('check')),
                  ElevatedButton(
                      onPressed: () {
                        setState(() {
                          if (index == data.length - 1) {
                            index = 0;
                          } else {
                            index++;
                          }
                        });
                      },
                      child: const Text('next')),
                ],
              )
            ],
          ),
        ),
      ),
    );
  }
}
