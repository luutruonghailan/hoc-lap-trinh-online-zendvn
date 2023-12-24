#include <iostream>
#include <string>
using namespace std;


int main() {
    string input = "!@x$3i*nc4*(hao";
    string decoded;
    for (char ch : input) {
        if ((ch >= 'a' && ch <= 'z') || (ch >= 'A' && ch <= 'Z')) {
            decoded += ch;
        }
    }
    cout << "Decoded string: " << decoded << endl;

    return 0;
}