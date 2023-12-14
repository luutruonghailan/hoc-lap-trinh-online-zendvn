#include<iostream>
using namespace std;
int main()
{
    // in số chữ số của 1 số nguyên dương
    // tính tổng của các chữ số
    int yourNumber      = 12;
    int sum             = 0;
    int count           = 0;

    while (yourNumber > 0)
    {
        int rightNumber     = yourNumber % 10;
        sum                 += rightNumber;
        yourNumber          = yourNumber / 10;
        count++;
    }

    cout << "sum: " << sum << endl;
    cout << "count: " << count << endl;
}