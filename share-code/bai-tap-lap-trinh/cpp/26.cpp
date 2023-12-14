#include <iostream>
using namespace std;
int main()
{

    int number = 1;
    int yourNumber;
    cout << "Nhập số bất kì: ";
    cin >> yourNumber;


    int multi = 1;
    int result = 0;
    while (number <= yourNumber)
    {
        for (int i = 1; i < number; i++)
        {
            cout << i << "x";
           
        }
        multi *= number;
        result += multi;
        if (number < yourNumber)
        {
            cout << number << "+";
        }else{
            cout << number << "=" << result;
        }
        number++;
    }
}