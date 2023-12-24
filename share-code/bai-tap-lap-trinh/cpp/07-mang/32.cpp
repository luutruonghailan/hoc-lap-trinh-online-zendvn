
#include <iostream>
using namespace std;

int main()
{
    // int arrInt[] = {1, 2, 3, 4, 5};
    int arrInt[] = {2, 4, 6, 2};
    int avg = 0;
    int sum = 0;
    string strSum = "";
    int count = 0;
    int length = sizeof(arrInt) / sizeof(int);
    bool firstNumber = true;

    for (int i = 0; i < length; i += 2)
    {
        if (arrInt[i] % 2 == 0)
        {
            string sign = firstNumber == true ? "" : " + ";
            sum += arrInt[i];
            strSum += sign + to_string(arrInt[i]);
            count++;
            firstNumber = false;
        }
    }

    if (count > 0)
    {
        avg = sum / count;
    }

    if (avg > 0)
    {
        cout << "Avg: (" << strSum << ") / " << count << " = " << avg << endl;
    }
    else
    {
        cout << "Avg: 0";
    }
}