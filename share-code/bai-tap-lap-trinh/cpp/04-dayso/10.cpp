#include <iostream>
using namespace std;
int main()
{
    int number      = 1;
    int yourNumber  = 4;
    int sum         = 0;
    string result   = "";

    while (number <= yourNumber)
    {
        sum += number;
        string sign = (number < yourNumber) ? " + " : " = ";
        result += to_string(number) + sign;
        number++;
    }
    cout << result << sum;
}