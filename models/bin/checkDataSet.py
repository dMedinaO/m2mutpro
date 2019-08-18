'''
script que permite obtener informacion del set de datos asociado al numero de ejemplos y a la
columna respuesta
'''

import sys
import pandas as pd

dataSet = pd.read_csv(sys.argv[1])
examples = len(dataSet)

columns = dataSet.columns.tolist()
columnResponse = columns[len(columns)-1]

print str(examples)+"-"+columnResponse
