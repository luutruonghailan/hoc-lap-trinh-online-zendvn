#include <iostream>
#include <cctype>
using namespace std;

int main() {
    string input = "ab@#AB69C!}+21";
    string numberString;
    string letterString;
    string specialCharString;

    for (char c : input) {
        if (isdigit(c)) {
            numberString += c;
        } else if (isalpha(c)) {
            letterString += c;
        } else if (ispunct(c)) {
            specialCharString += c;
        }
    }
    cout << "Chuoi so: " << numberString << endl;
    cout << "Chuoi chu: " << letterString << endl;
    cout << "Chuoi dac biet: " << specialCharString << endl;

    return 0;
}