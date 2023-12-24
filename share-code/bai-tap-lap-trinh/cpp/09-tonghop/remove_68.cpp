#include <iostream>
using namespace std;

int main()
{
    int yourNumber = 123;
    int sum = 0;
    int number = 1;
    string result = "";

    while (yourNumber > 0)
    {
        int rightNumber = yourNumber % 10;
        sum = rightNumber + sum;
        yourNumber = yourNumber / 10;
        string sign = (number <= rightNumber) ? " + " : " = ";
        result += to_string(number) + sign;
        number++;
    }

    cout << result << sum << endl;
}