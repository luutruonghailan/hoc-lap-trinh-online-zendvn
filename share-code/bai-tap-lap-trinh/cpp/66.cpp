#include <iostream>
#include <string>
#include <sstream>
using namespace std;

int main() {
    string str1 = "D:/hailan.doc";
    //string str2 = "D:/Data/Doing/psd/hailan.doc";

    stringstream ss(str1);
    string part;
    string filePath = "";

    while (getline(ss, part, '/')) {
        filePath += part + " > ";
    }

    if (!filePath.empty()) {
        filePath = filePath.substr(0, filePath.size() - 3);
    }
    cout << filePath <<endl;

    return 0;
}