#include <iostream>
using namespace std;
#include <string>

int main()
{
    int n = 5;
    int end = n / 2;

    for (int i = end * -1; i <= end; i++)
    {
        for (int j = end * -1; j <= end; j++)
        {

            if ((j >= (end - abs(i)) * -1) && (j <= end - abs(i)))
            {
                cout << "*";
            }
            else
            {
                cout << " ";
            }
        }
        printf("\n");
    }
}