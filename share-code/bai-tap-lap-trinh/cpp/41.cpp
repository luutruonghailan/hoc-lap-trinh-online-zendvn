#include <iostream>
using namespace std;

int main()
{
    int numberOne = 5;
    int numberTwo = 2;
    int    sum      = numberOne + numberTwo;
    int    subtract = numberOne - numberTwo;
    int    multi    = numberOne * numberTwo;
    double division = (double)numberOne / numberTwo;
    int    modulo   = numberOne % numberTwo;

    cout << numberOne << " + " << numberTwo << " = " << sum << endl;
    cout << numberOne << " - " << numberTwo << " = " << subtract << endl;
    cout << numberOne << " * " << numberTwo << " = " << multi << endl;
    cout << numberOne << " / " << numberTwo << " = " << division << endl;
    cout << numberOne << " % " << numberTwo << " = " << modulo << endl;
}
