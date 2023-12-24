#include <iostream>
using namespace std;

int main()
{
    int yourNumber;
    cout << "Nhập số nguyên dương n (1 <= n < 10): ";
    cin >> yourNumber;

    int sum = yourNumber + (yourNumber * 11) + (yourNumber * 111);

    cout << "Tổng theo dạng n + nn + nnn là: " << sum << endl;

    return 0;
}