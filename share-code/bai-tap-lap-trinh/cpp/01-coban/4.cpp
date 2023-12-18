#include <iostream>
using namespace std;
#include <iomanip>
int main()
{
    int numberOne    = 1;
    int numberTwo    = 5;
    int numberThree  = 19;

    int maxOneTwo   = max(numberOne,numberTwo);
    int maxNumber   = max(maxOneTwo, numberThree);

    // cout << "Max: " << maxNumber << endl;
    printf("Số lớn nhất trong 3 số %d, %d, %d là %d", numberOne,numberTwo, numberThree, maxNumber);
}