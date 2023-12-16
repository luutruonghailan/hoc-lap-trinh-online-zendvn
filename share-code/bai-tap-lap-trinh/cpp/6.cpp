#include <iostream>
using namespace std;
int main()
{
    /*
    +
    + +
    + + +
    */
    int number       = 1;
    string record    = "";
    string shape     = "";
    const int HEIGH  = 3;

    while (number <= HEIGH)
    {
        for (int i = 1; i <= number; i++)
        {
            record = "+ ";
        }
        shape += record ; 
        cout <<  shape << "\n";
        number++;
    }
}