#include <iostream>
using namespace std;
int main()
{
    /*
    +
    + +
    + + +
    */
    int number        = 1;
    string record     = "";
    string shape      = "";
    const int HEIGHT  = 3;

    while (number <= HEIGHT)
    {
        for (int i = 1; i <= number; i++)
        {
            record = "+ ";
        }
        number++;

        shape += record ; 
        cout <<  shape << "\n";
        
    }
}