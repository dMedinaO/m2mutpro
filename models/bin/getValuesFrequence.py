import sys
import pandas as pd
import json

dataSet = pd.read_csv(sys.argv[1])#set de datos a trabajar
tipoQuery = int(sys.argv[2])#si trae la frecuencia de las posiciones, los residuos originales o los mutados

#1: original 2: posicion 3: mutacion

#traemos la lista de features
columns = dataSet.columns.tolist()

elementFrequence = dataSet[columns[tipoQuery]]
uniqueElement = list(set(elementFrequence))

dictResponse = {}
values = []
labels = []

for element in uniqueElement:
    cont=0
    for data in elementFrequence:
        if data == element:
            cont+=1
    values.append(cont)
    labels.append(element)

dictResponse.update({"values": values})
dictResponse.update({"labels": labels})
print json.dumps(dictResponse)
