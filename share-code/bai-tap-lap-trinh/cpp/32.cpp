
#include <iostream>
using namespace std;

int main()
{
    int arrInt[] = {1, 2, 3, 4, 5};
    int avg = 0;
    int sum = 0;
    int count = 0;
    int length = sizeof(arrInt) / sizeof(int);

    for (int i = 0; i < length; i += 2)
    {
        if (arrInt[i] % 2 == 0)
        {
            sum += arrInt[i];
            count++;
        }
    }
    if (count > 0)
    {
        avg = sum / count;
    }
    avg = 0;
    cout << "count: " << count << endl;
    cout << "avg: " << avg << endl;
}