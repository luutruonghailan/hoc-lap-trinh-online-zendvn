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
        result +=  (number * number);
        if (number < yourNumber)
        {
            cout << number << "^2 +";  
        }else{
              cout << number << "^2 =" << result;
        }
        number++;
    }
}