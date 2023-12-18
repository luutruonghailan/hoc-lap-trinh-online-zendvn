#include <iostream>
using namespace std;
#include <math.h>
int main()
{
    // in số chữ số của 1 số nguyên dương
    // tính tổng của các chữ số
    int yourNumber  = 162;
    int sum         = 0;
    int number      = 1;
    string result   = "";
    int length      = to_string(yourNumber).length();
    int divided     =  pow(10, length -1);

    while (divided > 0)
    {
        int firtNumber  = yourNumber/divided;
            yourNumber  = yourNumber%divided;
            sum         += firtNumber;
            divided     = divided/10;
        string sign     = (divided != 0) ? " + " : " = ";
        result          += to_string(firtNumber)  + sign;
    }
    cout << "sum: " << result << sum << endl;
    cout << "Total: " << length << " digits" << endl;
}