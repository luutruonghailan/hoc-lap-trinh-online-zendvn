

#include <iostream>
using namespace std;
int main()
{
    int number = 1;
    int yourNumber = 4;
    cout << "Nhập số bất kì: ";
    cin >> yourNumber;
    int multi = 1;
    while (number <= yourNumber)
    {
        multi *= number;
        if (number < yourNumber)
        {
            cout << number << "x";
        }else{
            cout << number << "=" << multi;
        }
        number++;
    }
}