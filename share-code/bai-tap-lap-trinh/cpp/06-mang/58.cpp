
#include <iostream>
using namespace std;

int main()
{
    int arrInt[] = {1, 2, 3};
    int sumEven = 0;
    int sumOld = 0;
    int sumAll = 0;
    int length = sizeof(arrInt) / sizeof(int);

    for (int i = 0; i < length; i++)
    {
        if (arrInt[i] % 2 == 0)
        {
            sumEven += arrInt[i];
        }
        else
        {
            sumOld += arrInt[i];
        }
        sumAll += arrInt[i];
    }
    cout << "sumEven: " << sumEven << endl;
    cout << "sumOld: " << sumOld << endl;
    cout << "sumAll: " << sumAll << endl;
}