#include <iostream>
#include <string>
using namespace std;


int main() {
    string input        = "!@x$3i*nc4*(hao";
    string outString;
    string outNumber;
    string result       = "";
    int startIndex      = 0;
    int endIndex        = 0;

    for (char ch : input) {
        if ((ch >= 'a' && ch <= 'z') || (ch >= 'A' && ch <= 'Z')) {
            outString += ch;
        }
    }
     
    for (char c : input) {
        if (isdigit(c)) {
            outNumber += c;
        }
    }
    for (int i = 0; i < outNumber.length(); i++)
    {
        string word = "";
        int current = outNumber[i] - '0';
        word = outString.substr(endIndex,current) + " ";
        string upCase = word.substr(0, 1);
        for (char &c : upCase)
        {
            c = toupper(c);
        }
        word = upCase + word.substr(1);
        result += word;
        startIndex = endIndex;
        endIndex = startIndex + current;
    }
    cout << result << endl;
    return 0;
}