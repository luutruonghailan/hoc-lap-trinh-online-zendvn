#include <iostream>
using namespace std;
int main()
{
    // in số chữ số của 1 số nguyên dương
    // tính tổng của các chữ số
    int yourNumber  = 12;
    int sum         = 0;
    int count       = 0;
    int number      = 1;
    string result   = "";
    int length         = to_string(yourNumber).length();
    while (yourNumber > 0)
    {
        int rightNumber = yourNumber % 10;
        sum             = rightNumber + sum;
        string sign     = (rightNumber != length) ? " + " : " = ";
        yourNumber      = yourNumber / 10;
        result          = to_string(rightNumber)  + sign + result;
        count++;
    }
    cout << "sum: " << result << sum << endl;
    cout << "Total: " << count << " digits" << endl;
}