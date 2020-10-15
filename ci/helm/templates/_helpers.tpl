{{/*
Expand the name of the chart.
*/}}
{{- define "demo-symfony.name" -}}
{{- default .Chart.Name .Values.nameOverride | trunc 63 | trimSuffix "-" }}
{{- end }}

{{/*
Create a default fully qualified app name.
We truncate at 63 chars because some Kubernetes name fields are limited to this (by the DNS naming spec).
If release name contains chart name it will be used as a full name.
*/}}
{{- define "demo-symfony.fullname" -}}
{{- if .Values.fullnameOverride }}
{{- .Values.fullnameOverride | trunc 63 | trimSuffix "-" }}
{{- else }}
{{- $name := default .Chart.Name .Values.nameOverride }}
{{- if contains $name .Release.Name }}
{{- .Release.Name | trunc 63 | trimSuffix "-" }}
{{- else }}
{{- printf "%s-%s" .Release.Name $name | trunc 63 | trimSuffix "-" }}
{{- end }}
{{- end }}
{{- end }}

{{/*
Create chart name and version as used by the chart label.
*/}}
{{- define "demo-symfony.chart" -}}
{{- printf "%s-%s" .Chart.Name .Chart.Version | replace "+" "_" | trunc 63 | trimSuffix "-" }}
{{- end }}

{{/*
Common labels
*/}}
{{- define "demo-symfony.labels" -}}
helm.sh/chart: {{ include "demo-symfony.chart" . }}
{{ include "demo-symfony.selectorLabels" . }}
{{- if .Chart.AppVersion }}
app.kubernetes.io/version: {{ .Chart.AppVersion | quote }}
{{- end }}
app.kubernetes.io/managed-by: {{ .Release.Service }}
{{- end }}

{{/*
Selector labels
*/}}
{{- define "demo-symfony.selectorLabels" -}}
app.kubernetes.io/name: {{ include "demo-symfony.name" . }}
app.kubernetes.io/instance: {{ .Release.Name }}
{{- end }}

{{/*
Create the name of the service account to use
*/}}
{{- define "demo-symfony.serviceAccountName" -}}
{{- if .Values.serviceAccount.create }}
{{- default (include "demo-symfony.fullname" .) .Values.serviceAccount.name }}
{{- else }}
{{- default "default" .Values.serviceAccount.name }}
{{- end }}
{{- end }}

{{/*
Create the database url
*/}}
{{- define "demo-symfony.databaseurl" -}}
{{- printf "pgsql://%s:%s@%s-postgresql:5432/%s" .Values.postgresql.postgresqlUsername .Values.postgresql.postgresqlPassword .Release.Name .Values.postgresql.postgresqlDatabase | b64enc }}
{{- end }}

{{/*
Create the redis url
*/}}
{{- define "demo-symfony.redisurl" -}}
{{- printf "redis://:%s@%s-redis-headless" .Values.redis.password .Release.Name | b64enc }}
{{- end }}

{{/*
Create the redis sessions path
*/}}
{{- define "demo-symfony.redispath" -}}
{{- printf "tcp://%s-redis-headless?auth=%s" .Release.Name .Values.redis.password | b64enc }}
{{- end }}
