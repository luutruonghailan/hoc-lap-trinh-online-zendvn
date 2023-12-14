#include <iostream>
using namespace std;
int main()
{
    int number = 1;
    int yourNumber = 4;
    cout << "Nhập số bất kì: ";
    cin >> yourNumber;
    int sum = 0;
    while (number <= yourNumber)
    {
        sum += number;
        if (number < yourNumber)
        {
            cout << number << "+";
        }else{
            cout << number << "=" << sum;
        }
        number++;
    }
}