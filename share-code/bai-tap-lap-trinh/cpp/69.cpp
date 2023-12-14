#include <iostream>
#include <string>
using namespace std;

int main() {
    int yourNumber;
    cout << "Nhập số nguyên dương n (1 <= n < 10): ";
    cin >> yourNumber;

    // Tạo chuỗi dạng n, nn, nnn từ số nguyên n
    string n = to_string(yourNumber);
    string nn = n + n;
    string nnn = n + n + n;

    // Chuyển đổi chuỗi thành số nguyên để tính tổng
    int sum = stoi(n) + stoi(nn) + stoi(nnn);

    cout << "Tổng theo dạng n + nn + nnn là: " << sum << endl;

    return 0;
}