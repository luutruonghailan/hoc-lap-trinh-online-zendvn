#include <iostream>
#include<iomanip>
using namespace std;

int main()
{
    int scoreOne   = 6;
    int scoreTwo   = 9;
    int scoreThree = 5;
    int maxOneTwo  = max(scoreOne, scoreTwo);
    int maxNumber  = max(maxOneTwo, scoreThree);
    double avg = (double)(scoreOne + scoreTwo + scoreThree) / 3;

    cout << "Max " << maxNumber << endl;
    cout << "avg " << setprecision(2) << avg << endl;

}