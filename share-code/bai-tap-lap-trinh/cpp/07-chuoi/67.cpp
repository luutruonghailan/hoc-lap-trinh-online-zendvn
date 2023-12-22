#include <iostream>
#include <cctype>
using namespace std;

int main() {
    string str1 = "hai lan";
    // string str2 = "HAI LAN";
    // string str3 = "HaI Lan";
    for (char &c : str1) {
        if (isupper(c)) {
            c = tolower(c);
        } else if (islower(c)) {
            c = toupper(c);
        }
    }
    cout << str1 << endl; // In ra "HAI LAN"
    return 0;
}