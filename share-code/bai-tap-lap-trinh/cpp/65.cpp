#include <iostream>
#include <string>
#include <algorithm>
using namespace std;

int main() {
    string str1 = "D:/Data/Doing/psd/hailan.doc";
    size_t lastSlash = str1.find_last_of("/\\"); 
    
    if (lastSlash == string::npos) {
        cout << "Invalid file path." << endl;
    }
    
  
    string fileName = str1.substr(lastSlash + 1);
    size_t lastDot = fileName.find_last_of(".");
    if (lastDot == string::npos || lastDot == 0 || lastDot == fileName.length() - 1) {
        cout << "Invalid file extension." << endl;
    }
    string fileExtension = fileName.substr(lastDot + 1);
    string fileNameOnly = fileName.substr(0, lastDot);
    
   cout << "Name: " << fileNameOnly << endl;
    cout << "Extension: " << fileExtension << endl;

    return 0;
}