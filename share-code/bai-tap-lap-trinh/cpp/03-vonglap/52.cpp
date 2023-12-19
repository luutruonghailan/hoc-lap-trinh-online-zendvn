#include <iostream>
using namespace std;
#include <math.h>
int main()
{
    // in số chữ số của 1 số nguyên dương
    // tính tổng của các chữ số
    int yourNumber = 162;
    int sum = 0;
    int number = 1;
    string result = "";
    int count = 0;

    while (yourNumber > 0)
    {
        int lastNumber = yourNumber % 10;
        yourNumber /= 10;
        sum += lastNumber;
        string sign = (yourNumber != 0) ? " + " : "";
        result = sign + to_string(lastNumber) + result;
        count++;
    }
    cout << "sum: " << result << " = " << sum << endl;
    cout << "Total: " << count << " digits" << endl;
}