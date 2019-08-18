import pandas as pd
import sys
import json

dataSet = pd.read_csv(sys.argv[1])
kindDataSet = int(sys.argv[2])

columns = dataSet.columns.tolist()

dictResponse = {}

if kindDataSet == 2:#regresion
    dataResponse = []
    for element in dataSet[columns[len(columns)-1]]:
        dataResponse.append(element)
    dictResponse.update({"values":dataResponse})
    dictResponse.update({"tipo":"REG"})

else:#class

    arrayClass = dataSet[columns[len(columns)-1]]
    uniqueClass = list(set(arrayClass))
    values = []

    for element in uniqueClass:
        cont=0
        for classValue in arrayClass:
            if classValue == element:
                cont+=1
        values.append(cont)
    dictResponse.update({"values": values})
    dictResponse.update({"labels": uniqueClass})
    dictResponse.update({"tipo":"CLASS"})

print json.dumps(dictResponse)
