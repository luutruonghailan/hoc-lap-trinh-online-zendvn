
#include <iostream>
using namespace std;

int main()
{
    int arrInt[] = {1, 2, 3};
    int sumEven = 0;
    int sumOld = 0;

    for (int number : arrInt)
    {
        if (number % 2 == 0)
        {
            sumEven += number;
        }
        else
        {
            sumOld += number;
        }
    }

    cout << "sumEven = " << sumEven << endl;
    cout << "sumOld = " << sumOld << endl;
    cout << "sumAll = " << sumEven + sumOld << endl;
}