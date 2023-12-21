#include <iostream>
#include <iomanip>
using namespace std;

int main()
{
    int numberOne = 1;
    int numberTwo = 5;
    int numberThree = 19;

    int maxOneTwo = max(numberOne, numberTwo);
    int maxNumber = max(maxOneTwo, numberThree);

    printf("Số lớn nhất trong 3 số %d, %d, %d là %d", numberOne, numberTwo, numberThree, maxNumber);
}