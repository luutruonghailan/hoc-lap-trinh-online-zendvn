#include <iostream>
using namespace std;
int main()
{
    int numberOne       = 5;
    int numberTwo       = 2;

    int sum             = numberOne + numberTwo;
    int sub             = numberOne - numberTwo;
    int multi           = numberOne * numberTwo;
    double div          = (double) numberOne / numberTwo;
    int modulo          = numberOne % numberTwo;

    cout << numberOne << " + " << numberTwo << " = " << sum << endl;
    cout << numberOne << " - " << numberTwo << " = " << sub << endl;
    cout << numberOne << " x " << numberTwo << " = " << multi << endl;
    cout << numberOne << " / " << numberTwo << " = " << div << endl;
    cout << numberOne << " % " << numberTwo << " = " << modulo << endl;


}