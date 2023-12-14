#include <iostream>
#include <cctype>
using namespace std;


int main() {
    string str1     = "abcc";
    string str2     = "ab2cc";
    
    bool isCheck    = false;
     for (char c : str2) {
        if (isdigit(c)) {
            isCheck = true; // Nếu có ít nhất một ký tự là chữ số, trả về true
        }
    }
   cout  << boolalpha << isCheck; // In ra "true" hoặc "false" thay vì 1 hoặc 0 
    return 0;
}