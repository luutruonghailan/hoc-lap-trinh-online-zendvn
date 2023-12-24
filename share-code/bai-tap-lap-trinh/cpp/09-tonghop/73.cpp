#include <iostream>
#include <string>
#include <sstream>
using namespace std;

int main() {
    string id = "69";
    string str = "1, 69";
    stringstream ss(str);
    string token;
    int count = 0;
    
    while (getline(ss, token, ',')) {
        size_t start = token.find_first_not_of(" ");
        size_t end = token.find_last_not_of(" ");
        
        if (start != string::npos && end != string::npos) {
            token = token.substr(start, end - start + 1);
            if (token == id) {
                count++;
            }
        }
    }
    cout << "ID " << id << " xuất hiện " << count << " lần trong chuỗi." << endl;

    return 0;
}