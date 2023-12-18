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
    const int HEIGHT  = 5;

    for (int i = number; i <= HEIGHT; i++)
    {
        for (int j = 1; j <= i; j++)
        {
            record = "+ ";
        }
        shape += record ; 
        cout <<  shape << "\n";
    }
}