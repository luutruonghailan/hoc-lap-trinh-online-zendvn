#include <iostream>
#include <sstream>
using namespace std;

int main() {
    string str1 = "hai";
    string str2 = "hai lan";
    string str3 = "truong hai lan";
    stringstream ss(str2);
    string word;
    int count = 0;
        while (ss >> word) { // việc đọc từ chuỗi ss vào biến word vẫn thành công 
                count++; // Tăng biến đếm mỗi khi đọc được một từ từ chuỗi
            }
            
     cout << count;
    
    return 0;
}